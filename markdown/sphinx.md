---
statblock: true
name: 'Sphinx - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 11
ac: 20
hp: 142
hit_dice: '15d10 + 60'
speed: '40 ft., fly 60 ft.'
stats:
    - 22
    - 14
    - 18
    - 18
    - 22
    - 20
damage_immunities: 'psychic; damage from nonmagical weapons'
condition_immunities: 'charmed, frightened, paralyzed, stunned'
saves:
    dexterity: 6
    constitution: 8
    intelligence: 8
    wisdom: 10
skillsaves:
    arcana: 8
    history: 8
    perception: 10
    religion: 8
senses: 'truesight 120 ft., passive Perception 20'
languages: 'Celestial, Common, telepathy 120 ft.'
traits:
    0: { name: Inscrutable, desc: "The sphinx is immune to divination and to any effect that would sense its emotions or read its thoughts. Insight checks made to determine the sphinx's intentions are made with disadvantage." }
    1: { name: 'Innate Spellcasting', desc: "The sphinx's spellcasting ability is Wisdom (spell save DC 18). It can cast the following spells, requiring no material components:" }
    traits: ['At will: detect evil and good, detect magic, minor illusion, spare the dying', '3/day each: dispel magic, identify, lesser restoration, remove curse, scrying, tongues, zone of truth', "1/day each: contact other plane, flame strike, freedom of movement, greater restoration, legend lore, heroes' feast"]
actions:
    - { name: Multiattack, desc: 'The sphinx attacks twice with its claw.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 17 (2d10 + 6) slashing damage.' }
    - { name: 'Dispel Magic (3rd-Level; V, S)', desc: "The sphinx scours the magic from one creature, object, or magical effect within 120 feet that it can see. A spell ends if it was cast with a 3rd-level or lower spell slot. For spells using a 4th-level or higher spell slot, the sphinx makes a Wisdom ability check (DC 10 + the spell's level) for each one, ending the effect on a success." }
    - { name: 'Flame Strike (5th-Level; V, S)', desc: 'A column of divine flame fills a 10-foot-radius, 40-foot-high cylinder within 60 feet. Creatures in the area make a DC 18 Dexterity saving throw, taking 14 (4d6) fire damage and 14 (4d6) radiant damage on a failure or half damage on a success.' }
'bonus actions':
    - { name: 'Speed Time (1/Day, While Bloodied)', desc: "For 1 minute, the sphinx's Speed and flying speed are doubled, opportunity attacks against it are made with disadvantage, and it can attack three times with its claw (instead of twice) when it uses Multiattack." }
    - { name: 'Planar Jaunt (1/Day)', desc: 'The sphinx targets up to eight willing creatures it can see within 300 feet. The targets are magically transported to a different place, plane of existence, demiplane, or time. This effect ends after 24 hours or when the sphinx takes a bonus action to end it. When the effect ends, the creatures reappear in their original locations, along with any items they acquired on their jaunt. While the effect lasts, the sphinx can communicate telepathically with the targets. The sphinx chooses one of the following destinations:' }
    - { name: 'Different Location or Plane of Existence', desc: "The creatures appear in empty spaces of the sphinx's choice anywhere on the Material Plane or on a different plane altogether." }
    - { name: Demiplane, desc: "The creatures appear in empty spaces of the sphinx's choice on a demiplane. The demiplane can be up to one square mile in size. The demiplane can appear to be inside, outside, or underground, and can contain terrain, nonmagical objects, and magical effects of the sphinx's choosing. The sphinx may populate it with creatures and hazards with a total Challenge Rating equal to or less than the sphinx's Challenge Rating." }
    - { name: Time, desc: "The creatures appear in empty spaces of the sphinx's choosing anywhere on the Material Plane, at any time from 1,000 years in the past to 1,000 years in the future. At the Narrator's discretion, changes made in the past may alter the present." }
combat:
    - { name: 'The sphinx uses Planar Jaunt to banish its foes if it can', desc: "Otherwise, it uses its action to cast Flame Strike on the first turn of combat and then uses its claws on successive turns. It speeds time for itself as soon as it's bloodied. With its legendary action, the sphinx attacks with its claw if it can reach an enemy or uses Teleport if it can't, and then uses Slow Time with its remaining legendary action each turn. The sphinx doesn't retreat." }

---
```statblock
monster: Sphinx - A5E
```

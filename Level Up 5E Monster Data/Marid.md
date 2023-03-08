---
statblock: true
name: Marid
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Elemental
cr: 11
ac: 17
hp: 172
hit_dice: '15d10 + 90'
speed: '30 ft., fly 60 ft., swim 90 ft.'
stats:
    - 22
    - 16
    - 22
    - 16
    - 14
    - 16
damage_resistances: 'acid, cold, lightning'
saves:
    - { constitution: 10 }
    - { intelligence: 7 }
    - { wisdom: 6 }
    - { charisma: 7 }
skillsaves:
    - { perception: 6 }
    - { persuasion: 7 }
senses: 'blindsight 30 ft., darkvision 120 ft., passive Perception 16'
languages: Aquan
traits:
    0: { name: Amphibious, desc: 'The marid can breathe air and water.' }
    1: { name: 'Innate Spellcasting', desc: "The marid's innate spellcasting ability is Charisma (spell save DC 15). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: alter self (can assume Medium or Large form), create or destroy water, detect magic, purify food and drink', '3/day each: control water, creation, tongues, water breathing, water walk', '1/day each: conjure elemental (water elemental only), plane shift (to Elemental Plane of Water only)']
    2: { name: 'Elemental Demise', desc: 'When a genie dies, its body becomes a mote of elemental energy. This mote might take the form of a glowing chunk of earth, a shard of crystallized air, or an ever-burning ember.' }
actions:
    - { name: Multiattack, desc: 'The marid makes two trident attacks. One of these can be replaced with a net attack.' }
    - { name: Trident, desc: "Melee or Ranged Weapon Attack: +10 to hit, reach 10 ft. or range 20/60 ft., one target. Hit: 13 (2d6 + 6) piercing damage plus 5 (1d10) lightning damage. If thrown, the trident returns to the marid's hand." }
    - { name: Net, desc: 'Ranged Weapon Attack: +10 to hit, range 5/15 ft., one target. Hit: A Large, Medium, or Small target is restrained until it is freed. A creature can use its action to make a DC 18 Strength check, freeing itself or another creature within its reach on a success. The net is an object with AC 10, 20 hit points, vulnerability to slashing damage, and immunity to bludgeoning, poison, and psychic damage.' }
'bonus actions':
    - { name: 'Fog Cloud (1/Day)', desc: 'The marid magically creates a heavily obscured area of fog (or, if underwater, inky water) in a 30-foot radius around a point it can see within 60 feet. The fog spreads around corners and can be dispersed by a moderate wind or current (at least 10 miles per hour). Otherwise, it disperses after 10 minutes. The marid can see through this fog.' }
    - { name: 'Water Jet (While Bloodied)', desc: 'The marid shoots water in a 5-foot-wide, 60-foot-long jet. Each creature in the area makes a DC 18 Dexterity saving throw. On a failure, a target takes 21 (6d6) bludgeoning damage and is pushed 20 feet away from the marid, to a maximum of 60 feet away, and knocked prone. On a success, a target takes half damage.' }
combat:
    - { name: 'Marids begin combat by creating a fog cloud', desc: 'Within this cloud, they have a tactical advantage against blinded foes, and will attack with their trident and water jet. When forced to fight outside their fog cloud, marids use their flight and swim speed to stay away from slower melee opponents, and use Water Jet to push away creatures who are too close. They may use their net to restrain a foe and concentrate their attacks on that foe. Marids flee once bloodied, unless they have an overpowering reason to stand their ground.' }

---
```statblock
monster: Marid
```

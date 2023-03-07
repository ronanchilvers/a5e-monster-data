---
statblock: true
name: 'Great Wyrm White Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Dragon
cr: 22
ac: 20
hp: 740
hit_dice: '40d20 + 320'
speed: '40 ft., burrow 40 ft., fly 80 ft., swim 40 ft.'
stats:
    - 26
    - 12
    - 26
    - 10
    - 16
    - 16
damage_immunities: cold
saves:
    - { dexterity: 8 }
    - { constitution: 15 }
    - { wisdom: 10 }
    - { charisma: 10 }
skillsaves:
    - { intimidation: 10 }
    - { perception: 10 }
    - { stealth: 8 }
senses: 'blindsight 60 ft., darkvision 120 ft., passive Perception 23'
languages: 'Common, Draconic'
traits:
    0: { name: 'Cold Mastery', desc: "The dragon's movement and vision is not hindered by cold, icy surfaces, snow, wind, or storms. Additionally, the dragon can choose to burrow through snow and ice without leaving a trace." }
    1: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, it sheds some of its scales, which turn to ice. If it has no more uses of this ability, its Armor Class is reduced to 18 until it finishes a long rest.' }
    2: { name: 'Heart of Winter', desc: "When the dragon is first bloodied, it immediately recharges its breath weapon, if it's not already available. Additionally, the damage from the dragon's Raging Storm is doubled." }
    3: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 18). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:dominate beast, fire shield, animal friendship, sleet storm', ' 1/day each:control weather, wall of ice, reverse gravity']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws. In place of its bite attack, it can Spit Ice.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +15 to hit, reach 15 ft., one target. Hit: 30 (4d10 + 8) piercing damage plus 9 (2d8) cold damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +15 to hit, reach 10 ft., one target. Hit: 21 (3d8 + 8) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +15 to hit, reach 20 ft., one target. Hit: 21 (3d8 + 8) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Spit Ice', desc: 'The dragon targets a creature within 60 feet, forcing it to make a DC 23 Dexterity saving throw. On a failure, the target takes 22 (4d10) cold damage, and its speed is reduced to 0 until the end of its next turn. On a success, it takes half damage.' }
    - { name: 'Cold Breath (Recharge 56)', desc: 'The dragon exhales a 90-foot cone of frost. Each creature in the area makes a DC 23 Constitution saving throw. On a failure, it takes 66 (19d6) cold damage, and its speed is reduced to 0 until the end of its next turn. On a success, it takes half damage.' }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
legendary_actions:
    0: { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    1: { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 18 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turn, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    2: { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 23 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    3: { name: 'Raging Storm (1/Day, Bloodied Only)', desc: 'For 1 minute, gusts of sleet emanate from the dragon in a 40-foot-radius sphere, spreading around corners. The area is lightly obscured, the ground is difficult terrain, and nonmagical flames are extinguished. The first time a creature other than the dragon moves on its turn while in the area, it must succeed on a DC 18 Dexterity saving throw or take 11 (2d10) cold damage and fall prone (or fall if it is flying).' }
    legendary_actions: ['The dragon has the following additional legendary actions, which it can use only while bloodied:']
    4: { name: 'Elite Recovery', desc: 'The dragon ends one negative effect currently affecting it. It can do so as long as it has at least 1 hit point, even while unconscious or incapacitated.' }
    5: { name: 'Mortal Terror (Gaze)', desc: 'A creature within 120 feet makes a saving throw against Roar, even if it has already successfully saved within the past 24 hours.' }
    6: { name: 'Gathering Storm (Costs 2 Actions)', desc: 'The dragon recharges its breath weapon.' }
    7: { name: 'Snowball (Costs 3 Actions)', desc: "The dragon spits a snowball at a creature it can see within 90 feet. That creature is affected as if caught in the dragon's breath weapon, rolling to save as usual." }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Great Wyrm White Dragon - A5E
```

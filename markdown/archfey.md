---
statblock: true
name: 'Archfey - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fey
cr: 12
ac: 16
hp: 330
hit_dice: '44d8 + 132'
speed: '35 ft., fly 60 ft.'
stats:
    - 16
    - 20
    - 16
    - 16
    - 20
    - 20
condition_immunities: 'charmed, paralyzed, poisoned, unconscious'
saves:
    dexterity: 9
    wisdom: 9
    charisma: 9
skillsaves:
    arcana: 7
    history: 7
    insight: 9
    nature: 7
    perception: 9
    persuasion: 9
senses: 'truesight 60 ft., passive Perception 19'
languages: 'Common, Elvish, Sylvan, two more'
traits:
    0: { name: 'Faerie Form', desc: "The archfey can magically change its size between Large, Medium, and Tiny as an action. While Tiny, the bludgeoning, piercing, and slashing damage dealt by the archfey's attacks is halved. Additionally, it has disadvantage on Strength checks and advantage on Dexterity checks. While Large, the archfey has advantage on Strength checks. Its statistics are otherwise unchanged." }
    1: { name: 'Faerie Light', desc: 'As a bonus action, the archfey can cast dim light for 30 feet, or extinguish its glow.' }
    2: { name: 'Innate Spellcasting', desc: "The archfey's spellcasting ability is Charisma (spell save DC 17). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: animal messenger, detect evil and good, detect magic, disguise self', '3/day each: charm person, scrying, zone of truth', "1/day each: dream, geas, heroes' feast, magic circle, polymorph (self only)"]
    3: { name: 'Magic Resistance', desc: 'The archfey has advantage on saving throws against spells and magical effects.' }
    4: { name: 'Elite Recovery', desc: 'At the end of each of her turns, the archfey can end one condition or effect on herself. She can do this even when unconscious or incapacitated.' }
    5: { name: 'Expanded Spell List', desc: 'The archfey can cast wish with no material components three times per year. She can cast weird once per day.' }
    6: { name: 'Fey Madness', desc: "While bloodied, the archfey can take a reaction on each creature's turn and recharges Faerie Step on each of her own turns." }
    7: { name: 'Mass Darkvision', desc: 'The archfey and creatures she chooses within 120 feet have darkvision out to a range of 120 feet.' }
actions:
    - { name: Multiattack, desc: 'The archfey makes two glittering scimitar attacks.' }
    - { name: 'Glittering Scimitar', desc: 'Melee Weapon Attack: +9 to hit, reach 5 ft., one target. Hit: 8 (1d6 + 5) slashing damage plus 10 (3d6) cold, fire, lightning, or psychic damage (its choice).' }
    - { name: 'Gleaming Longbow', desc: 'Ranged Weapon Attack: +9 to hit, range 150/600 ft., one target. This attack ignores half or three-quarters cover. Hit: 9 (1d8 + 5) piercing damage plus 14 (4d6) cold, fire, lightning, or psychic damage (its choice).' }
    - { name: 'Evil Eye (Gaze)', desc: "The archfey targets one creature not under the effect of a faerie's Evil Eye within 60 feet. The target makes a DC 17 Wisdom saving throw. On a failed saving throw, the archfey chooses one of the following effects to magically impose on the target. Each effect lasts for 1 minute." }
    - { name: 'The target falls asleep', desc: 'This effect ends if the target takes damage or another creature uses an action to rouse it.' }
    - { name: 'The target is frightened', desc: 'This effect ends if the target is ever 60 feet or more from the archfey.' }
    - { name: 'The target is poisoned', desc: 'It can repeat the saving throw at the end of each of its turns, ending the effect on itself on a success.' }
    - { name: 'Summon Midnight (1/Day)', desc: 'Night magically falls over a 5-mile-diameter area, lasting for 1 hour. As an action, the archfey can end this effect.' }
    - { name: 'Weird (9th-Level; V, S, Concentration)', desc: "The archfey terrifies creatures with their own worst nightmares. Each creature within 30 feet of a point within 120 feet makes a DC 17 Wisdom saving throw. On a failure, the creature is frightened for 1 minute. At the end of each of the creature's turns, the creature takes 22 (4d10) psychic damage and then repeats the saving throw, ending the effect on itself on a success." }
reactions:
    - { name: Riposte, desc: 'When the archfey is hit by a melee attack made by a creature it can see, it makes a glittering scimitar attack against the attacker.' }
    - { name: 'Vengeful Eye', desc: 'When the archfey is hit by a ranged attack or targeted with a spell by a creature within 60 feet, it uses Evil Eye on the attacker if they can see each other.' }
'bonus actions':
    - { name: 'Faerie Step (Recharge 56)', desc: 'The archfey magically teleports up to 60 feet to a space it can see.' }
combat:
    - { name: 'The noble closes to fight in melee if possible', desc: 'While doing so, it uses Vengeful Eye as its reaction to put isolated ranged attackers to sleep. If it feels outmatched by a strong melee opponent, it uses its reaction to make a glittering scimitar attack and then uses Faerie Step to move away on its turn. It flees when reduced to 55 hit points or fewer. Once out of sight, it casts disguise self.' }

---
```statblock
monster: Archfey - A5E
```
